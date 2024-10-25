import LandingLayout from "@/Layouts/LandingLayout";
import { PaginatedData } from "@/types";
import { Suspense } from "react";
import { Link } from "@inertiajs/react";
import { convertDateToLocaleString } from "@/utils/parse";
import Pagination from "@/Components/Pagination/Pagination";

type ActivityDataProp = {
  slug: string;
  title: string;
  content: string;
  thumbnail: string | null;
  created_at: string;
};

type HomePageProp = {
  activities: PaginatedData<ActivityDataProp>;
};

function Home({ activities }: HomePageProp) {
  const RenderActivities = () => {
    if (!activities || activities.data.length === 0)
      return (
        <div
          data-aos="fade-up"
          className="flex justify-center items-center w-full h-[12vh]"
        >
          <p className="text-2xl">Belum ada berita terbaru</p>
        </div>
      );

    const dataId = activities.meta.current_page * 5 - 5;

    return (
      <>
        {activities.data.map((activity: ActivityDataProp, index: number) => (
          <div
            data-aos="fade-up"
            data-aos-delay={`${index * 150}`}
            key={`data-${Math.floor(Math.random() * 4 + 1)}-berita-terkini-${
              dataId + index
            }`}
            className="card bg-base-100 lg:w-[20vw] shadow-xl"
          >
            <figure>
              <img
                loading="lazy"
                src={activity.thumbnail || ""}
                alt={`Logo Berita ${dataId + index + 1}`}
                width={150}
                height={150}
              />
            </figure>
            <div className="card-body">
              <div className="card-actions justify-start">
                <div className="badge badge-outline flex justify-center w-auto h-auto">
                  <span className="lg:text-md text-sm w-full">
                    {convertDateToLocaleString(activity.created_at) || ""}
                  </span>
                </div>
              </div>
              <h2 className="card-title mt-3 font-extrabold text-start">
                <Link href={route("activity.show", activity.slug)}>
                  {activity.title}
                </Link>
              </h2>
              <p className="text-start text-sm">{activity.content}</p>
              <div className="card-actions justify-end">
                <Link
                  href={route("activity.show", activity.slug)}
                  className="btn bg-custom-yellow dark:text-neutral text-base h-[2vh] mt-[3vh] font-bold lg:text-base"
                >
                  Selengkapnya
                </Link>
              </div>
            </div>
          </div>
        ))}
      </>
    );
  };

  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <div className="text-center mt-[5vh]" data-aos="fade-up">
        <h1 className="text-4xl font-extrabold">Kegiatan</h1>
        <p className="mt-4 text-md">Kita secara berkala melakukan kegiata</p>
        <div className="flex flex-wrap justify-center items-center gap-10 mt-[5vh]">
          <Suspense
            fallback={
              <div
                data-aos="fade-up"
                className="flex justify-center items-center w-full h-[50vh]"
              >
                <div className="loading loading-lg" />
                <p className="text-2xl ms-5">Memuat berita terbaru...</p>
              </div>
            }
          >
            <RenderActivities />
          </Suspense>
        </div>
        <div className="flex items-center justify-center mt-[4vh] mb-[4vh]">
          <Pagination links={activities.meta.links} />
        </div>
      </div>
    </div>
  );
}

/**
 * Persistent Layout (Inertia.js)
 *
 * [Learn more](https://inertiajs.com/pages#persistent-layouts)
 */
Home.layout = (page: React.ReactNode) => (
  <LandingLayout title="Kegiatan" children={page} />
);

export default Home;
