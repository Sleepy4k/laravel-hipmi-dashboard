import LandingLayout from "@/Layouts/LandingLayout";
import LatestActivity from "./partials/LatestActivity";
import DetailActivity from "./partials/DetailActivity";
import { Link } from "@inertiajs/react";

type ImageBody = {
  url: string;
};

type LatestActivity = {
  slug: string;
  title: string;
  thumbnail: string | null;
  created_at: string;
};

type ActivityData = LatestActivity & {
  content: TrustedHTML;
  images: ImageBody[];
};

type ShowPageProp = {
  data: ActivityData;
  latest: LatestActivity[];
};

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
