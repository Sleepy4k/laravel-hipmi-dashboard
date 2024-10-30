import LandingLayout from "@/Layouts/LandingLayout";
import Visi from "./partials/Visi";
import Banner from "./partials/Banner";
import { DataStateType, HomePageProp } from "./types";

function Home({ data }: HomePageProp) {
  const initialState: DataStateType = {
    kabinet: null,
    description: null,
    visi: [],
    misi: null,
    slogan: null,
  };

  const { kabinet, description, visi, misi, slogan } = data.reduce(
    (acc, item) => {
      switch (item.key) {
        case "kabinet":
          acc.kabinet = item.value;
          break;
        case "description":
          acc.description = item.value;
          break;
        case "visi":
          acc.visi = JSON.parse(item.value);
          break;
        case "misi":
          acc.misi = item.value;
          break;
        case "slogan":
          acc.slogan = item.value;
          break;
        default:
          break;
      }
      return acc;
    },
    initialState
  );

  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <Banner kabinet={kabinet} description={description} />

      <div className="text-center mb-12">
        <div data-aos="fade-up">
          <h1 className="text-3xl font-extrabold" data-aos="zoom-in-up">
            Slogan
          </h1>

          <div
            className="flex w-full justify-center mt-3 h-[1vh]"
            data-aos="fade-up"
          >
            <div className="divider w-[60%] border-black bg-black h-1 dark:border-neutral dark:bg-neutral" />
          </div>

          <div className="flex w-full justify-center mt-5 mb-[1vh] xs:mb-[2vh] h-[1vh]">
            <span
              data-aos="zoom-out-up"
              className="lg:text-md text-sm lg:font-base font-sm"
              dangerouslySetInnerHTML={{
                __html: slogan || "Pengusaha Penjuang, Pejuang Pengusaha",
              }}
            />
          </div>
          <div
            className="flex w-full justify-center mb-[2vh] h-[1vh]"
            data-aos="fade-up"
          >
            <div className="divider w-[60%] border-black bg-black h-1 dark:border-neutral dark:bg-neutral" />
          </div>
        </div>

        <div className="flex flex-col gap-5 mt-12">
          <div className="flex flex-col gap-2 mt-[5vh]">
            <h1 className="text-3xl font-extrabold">Misi dan Visi</h1>
            <div className="flex w-full justify-center mb-2 mt-4">
              <p
                className="text-center max-w-[60%]"
                dangerouslySetInnerHTML={{
                  __html: misi || "-",
                }}
              />
            </div>

            <div className="flex w-full justify-center mb-2 h-[1vh]">
              <div className="divider w-[60%] h-1 dark:border-neutral dark:bg-neutral" />
            </div>

            <Visi visi={visi} />
          </div>
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
  <LandingLayout title="Tentang" children={page} />
);

export default Home;
