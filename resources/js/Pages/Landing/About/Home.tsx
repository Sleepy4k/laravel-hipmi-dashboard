import LandingLayout from "@/Layouts/LandingLayout";
import { LandingDataStruct } from "@/types";
import { Suspense } from "react";

type VisiDataProp = {
  title: string;
  description: string;
};

type HomePageProp = {
  data: LandingDataStruct[];
};

function Home({ data }: HomePageProp) {
  const visi: LandingDataStruct[] = [];
  const misi: LandingDataStruct[] = [];
  const slogan: LandingDataStruct[] = [];

  data.forEach((data: LandingDataStruct) => {
    switch (data.key) {
      case "visi":
        visi.push(data);
        break;
      case "misi":
        misi.push(data);
        break;
      case "slogan":
        slogan.push(data);
        break;
      default:
        break;
    }
  });

  const RenderVisi = () => {
    if (!visi || visi.length === 0)
      return (
        <div className="flex justify-center items-center w-full h-[50vh]" data-aos="fade-up">
          <p className="text-2xl">Belum ada visi yang dibuat</p>
        </div>
      );

    const parsedVisi: VisiDataProp[] = JSON.parse(visi[0].value);

    return (
      <>
        {parsedVisi.map((data: any, index: number) => {
          if (!data.title || data.title == null) return null;

          return (
            <div
              data-aos="fade-up"
              data-aos-delay={`${index * 150}`}
              key={`data-${Math.floor(Math.random() * 4 + 1)}-visi-${index}`}
              className="card bg-base-100 lg:w-[18vw] lg:min-h-[30vh] shadow-xl"
            >
              <div className="card-body">
                <h2 className="card-title mt-3 font-extrabold text-start">
                  {data.title}
                </h2>
                <p className="text-start text-sm mt-3">{data.description}</p>
              </div>
            </div>
          );
        })}
      </>
    );
  };

  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <div className="flex min-h-[55vh] mb-12">
        <div className="hero">
          <div className="flex flex-col lg:flex-row hero-content justify-between lg:gap-1 gap-[25vw]">
            <div data-aos="fade-up">
              <h1 className="text-lg font-bold mb-[5vh]">Tentang Kami</h1>
              <h1 className="lg:text-5xl text-3xl font-extrabold max-w-[13vw]">
                Kabinet Danartapura
              </h1>
              <p className="py-6 lg:w-[32vw] mt-[4vh]">
                HIPMI PT ITelkom Purwokerto didirikan pada tahun 2024 oleh
                mahasiswa/mahasiswi yang memiliki minat dan bakat dalam bidang
                wirausaha. HIPMI PT Telkom Purwokerto merupakan wadah bagi
                mahasiswa-mahasiswi yang bertujuan untuk mentoring dan sharing
                seputar kegiatan wirausaha.
              </p>
            </div>
            <div
              className="flex lg:flex-row flex-col lg:mt-[8vh] lg:mb-1 mb-[12vh] lg:ms-[14vw] lg:h-[18vh] lg:w-full w-[10rem]"
              data-aos="fade-left"
            >
              <img
                loading="lazy"
                src={""}
                alt="App Banner Logo"
                className="max-w-md rounded-lg shadow-2xl bg-transparent"
              />
              <div className="divider divider-vertical lg:divider-horizontal" />
              <img
                loading="lazy"
                src={""}
                alt="App Banner Logo"
                className="max-w-md rounded-lg shadow-2xl bg-transparent"
              />
            </div>
          </div>
        </div>
      </div>

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
              className="lg:text-md text-sm lg:font-base font-sm"
              data-aos="zoom-out-up"
            >
              {slogan && slogan.length > 0
                ? slogan[0].value
                : "Pengusaha Penjuang, Pejuang Pengusaha"}
            </span>
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
              <p className="text-center max-w-[60%]">
                {misi && misi.length > 0 ? misi[0].value : "-"}
              </p>
            </div>
            <div className="flex w-full justify-center mb-2 h-[1vh]">
              <div className="divider w-[60%] h-1 dark:border-neutral dark:bg-neutral" />
            </div>
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
