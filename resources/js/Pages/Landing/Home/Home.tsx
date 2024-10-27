import LandingLayout from "@/Layouts/LandingLayout";
import { LandingDataStruct } from "@/types";
import Banner from "./partials/Banner";
import LatestActivity from "./partials/LatestActivity";
import PreviewAbout from "./partials/PreviewAbout";
import Calendar from "./partials/Calendar";

type ActivityDataProp = {
  slug: string;
  title: string;
  content: string;
  thumbnail: string | null;
  created_at: string;
};

type HomePageProp = {
  data: LandingDataStruct[];
  about: LandingDataStruct[];
  activities: ActivityDataProp[];
};

function Home({ data, about, activities }: HomePageProp) {
  const initialState = {
    banner: "",
    header: null,
    description: null,
    calendar: null,
  };

  const { banner, header, description, calendar } = data.reduce((acc, item) => {
    switch (item.key) {
      case "banner":
        acc.banner = item.value;
        break;
      case "calendar":
        acc.calendar = item.value;
        break;
      case "header":
        acc.header = item.value;
        break;
      case "description":
        acc.description = item.value;
        break;
      default:
        break;
    }
    return acc;
  }, initialState);

  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <Banner banner={banner} header={header} description={description} />

      <LatestActivity activities={activities} />

      <PreviewAbout about={about} />

      <Calendar url={calendar} />
    </div>
  );
}

/**
 * Persistent Layout (Inertia.js)
 *
 * [Learn more](https://inertiajs.com/pages#persistent-layouts)
 */
Home.layout = (page: React.ReactNode) => <LandingLayout children={page} />;

export default Home;
