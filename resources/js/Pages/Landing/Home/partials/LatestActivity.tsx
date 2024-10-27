import { Suspense } from "react";
import { convertDateToLocaleString } from "@/utils/parse";
import { Link } from "@inertiajs/react";

type ActivityDataProp = {
  slug: string;
  title: string;
  content: string;
  thumbnail: string | null;
  created_at: string;
};

type LatestActivityProp = {
  activities: ActivityDataProp[];
};

export default function LatestActivity({ activities }: LatestActivityProp) {
  const RenderActivities = () => {
    if (!activities || activities.length === 0)
      return (
        <div
          data-aos="fade-up"
          className="flex justify-center items-center w-full h-[12vh]"
        >
          <p className="text-2xl">Belum ada kegiatan terbaru</p>
        </div>
      );

    return activities.map((activity: ActivityDataProp, index: number) => (
      <div
        data-aos="fade-up"
        data-aos-delay={`${index * 150}`}
        key={activity.slug}
        className="card bg-base-100 lg:w-[20vw] shadow-xl"
      >
        <figure>
          <img
            loading="lazy"
            src={activity.thumbnail || ""}
            alt={`Logo Berita ${index + 1}`}
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
    ));
  };

  return (
    <div className="text-center">
      <h1 className="text-4xl font-extrabold">Kegiatan Terkini</h1>
      <p className="mt-4 text-md">Apa saja yang terjadi pada bulan ini</p>
      <div className="flex flex-wrap justify-center gap-10 mt-[5vh]">
        <Suspense
          fallback={
            <div
              data-aos="fade-up"
              className="flex justify-center items-center w-full h-[50vh]"
            >
              <div className="loading loading-lg" />
              <p className="text-2xl ms-5">Memuat kegiatan terbaru...</p>
            </div>
          }
        >
          <RenderActivities />
        </Suspense>
      </div>
    </div>
  );
}
