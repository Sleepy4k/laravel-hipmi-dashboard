import { Suspense } from "react";
import { convertDateToLocaleString } from "@/utils/parse";
import { Link } from "@inertiajs/react";

type ActivityDataProp = {
  slug: string;
  title: string;
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
        data-aos-delay={`${index * 250}`}
        key={`latest-activity-${index}`}
        className="recent-posts mb-6"
      >
        <div className="flex">
          <div className="w-1/3">
            <div className="md:w-[6vw] md:h-[8vh] me-[2vw] overflow-hidden">
              <img
                src={activity.thumbnail || ""}
                alt={`Activity Thumbnail ${index + 1}`}
                loading="lazy"
                className="w-full h-full rounded-lg"
              />
            </div>
          </div>
          <div className="w-2/3 pl-4">
            <p className="mb-2 text-lg">
              <Link
                href={route("activity.show", activity.slug)}
                className="hover:underline"
              >
                {activity.title}
              </Link>
            </p>
            <span className="text-sm">
              {convertDateToLocaleString(activity.created_at)}
            </span>
          </div>
        </div>
      </div>
    ));
  };

  return (
    <aside className="w-full lg:w-auto p-4">
      <div className="bg-gray-100 p-4 rounded-lg shadow-md">
        <h3 className="text-xl font-semibold mb-4" data-aos="fade-right">
          Terbaru
        </h3>
        <div className="divider w-auto h-1 bg-custom-yellow mb-8" />
        <div className="latest-article">
          <Suspense
            fallback={
              <div
                data-aos="fade-up"
                className="flex justify-center items-center w-full h-[50vh]"
              >
                <div className="loading loading-lg" />
                <p className="text-2xl ms-5">Memuat list kegiatan...</p>
              </div>
            }
          >
            <RenderActivities />
          </Suspense>
        </div>
      </div>
    </aside>
  );
}
