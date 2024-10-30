import LandingLayout from "@/Layouts/LandingLayout";
import LatestActivity from "./partials/LatestActivity";
import DetailActivity from "./partials/DetailActivity";
import { Link } from "@inertiajs/react";
import { ShowPageProp } from "./types";

function Show({ data, latest }: ShowPageProp) {
  return (
    <div className="w-full h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <div className="max-w-[80%] mx-auto p-4">
        <header className="text-center mb-8">
          <Link href={route("activity")} className="text-3xl font-bold">
            Kegiatan
          </Link>
        </header>

        <div className="flex flex-col md:flex-row">
          <DetailActivity activity={data} />
          <LatestActivity activities={latest} />
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
Show.layout = (page: React.ReactNode) => (
  <LandingLayout title="Kegiatan" children={page} />
);

export default Show;
