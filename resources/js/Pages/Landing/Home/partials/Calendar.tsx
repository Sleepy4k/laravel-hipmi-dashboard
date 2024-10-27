import { AppSetting } from "@/types";
import { usePage } from "@inertiajs/react";
import { Suspense } from "react";
import { CalenderIFrame } from "./StyledTag";

export default function Calendar({ url }: { url?: string | null }) {
  const { name } = usePage<{ app: AppSetting }>().props.app;

  return (
    <div className="mt-14 text-center">
      <h1 className="lg:text-4xl text-2xl font-extrabold" data-aos="fade-up">
        Kalender {name}
      </h1>

      <div className="flex flex-wrap justify-center gap-10 mt-[5vh] mb-[12vh]">
        <Suspense
          fallback={
            <div
              className="flex justify-center items-center w-full h-[50vh]"
              data-aos="fade-up"
            >
              <div className="loading loading-lg" />
              <p className="text-2xl ms-5">Memuat kalender...</p>
            </div>
          }
        >
          <div className="flex justify-center items-center min-h-[65vh] w-full">
            {url && url != null ? (
              <CalenderIFrame
                src={url}
                loading="lazy"
                data-aos="fade-up"
                className="lg:w-[85%] w-[100%] lg:h-[65vh] h-[100%]"
              />
            ) : (
              <div
                data-aos="fade-up"
                className="flex justify-center items-center w-full"
              >
                <p className="text-2xl">
                  Gagal memuat kalender, hubungi TEAM IT terkait hal ini
                </p>
              </div>
            )}
          </div>
        </Suspense>
      </div>
    </div>
  );
}
