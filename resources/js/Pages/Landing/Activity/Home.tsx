import LandingLayout from "@/Layouts/LandingLayout";
import { PaginatedData } from "@/types";
import Pagination from "@/Components/Pagination/Pagination";
import ActivityCard from "./partials/ActivityCard";

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
  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <div className="text-center mt-[5vh]" data-aos="fade-up">
        <h1 className="text-4xl font-extrabold">Kegiatan</h1>
        <p className="mt-4 text-md">Kita secara berkala melakukan kegiatan</p>

        <ActivityCard activities={activities} />

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
