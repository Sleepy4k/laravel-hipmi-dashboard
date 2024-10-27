import { Suspense } from "react";

type VisiDataProp = {
  title: string;
  description: string;
};

export default function Visi({ visi }: { visi: VisiDataProp[] }) {
  const RenderVisi = () => {
    if (!visi || visi.length === 0)
      return (
        <div
          data-aos="fade-up"
          className="flex justify-center items-center w-full h-[50vh]"
        >
          <p className="text-2xl">Belum ada visi yang dibuat</p>
        </div>
      );

    return visi.map((data: VisiDataProp, index: number) => (
      <div
        data-aos="fade-up"
        data-aos-delay={`${index * 100}`}
        key={`data-${Math.floor(Math.random() * 4 + 1)}-visi-${index}`}
        className="card bg-base-100 lg:w-[18vw] lg:min-h-[30vh] shadow-xl"
      >
        <div className="card-body">
          <h2 className="card-title mt-3 font-extrabold text-start">
            {data?.title || "-"}
          </h2>
          <p className="text-start text-sm mt-3">{data.description}</p>
        </div>
      </div>
    ));
  };

  return (
    <div className="flex w-full justify-center">
      <div className="flex flex-col gap-4 mt-8 w-[75%]">
        <div className="flex flex-wrap justify-center gap-10">
          <Suspense
            fallback={
              <div className="flex justify-center items-center w-full h-[50vh]">
                <div className="loading loading-lg" />
                <p className="text-2xl ms-5">Memuat list visi...</p>
              </div>
            }
          >
            <RenderVisi />
          </Suspense>
        </div>
      </div>
    </div>
  );
}
