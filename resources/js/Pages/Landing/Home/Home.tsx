import LandingLayout from "@/Layouts/LandingLayout";
import { LandingDataStruct } from "@/types";
import { Suspense } from "react";
import styled from "styled-components";
import { Link } from "@inertiajs/react";
import { convertDateToLocaleString } from "@/utils/parse";

type ActivityDataProp = {
  slug: string;
  title: string;
  content: string;
  thumbnail: string|null;
  created_at: string;
};

type HomePageProp = {
  data: LandingDataStruct[];
  activities: ActivityDataProp[];
};

function Home({ data, activities }: HomePageProp) {
  const filteredBanner: LandingDataStruct[] = data.filter(
    (data: LandingDataStruct) => {
      if (data.key != "banner") return null;

      return data;
    }
  );

  const banner = filteredBanner.length > 0 ? filteredBanner[0].value : "";

  const Hero = styled.div`
    background-image: url(${banner});
  `;

  const Calender = styled.iframe`
    border: solid 1px #777;
    width: 85%;
    height: 65vh;
  `;

  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <div className="lg:min-h-[80vh] min-h-[25rem]">
        <Hero
          className={`hero lg:h-[65vh] h-[20rem] bg-center bg-cover bg-no-repeat bg-opacity-50 rounded-3xl overflow-hidden`}
        >
          <div className="hero-overlay bg-opacity-80" />
          <div className="her-content text-neutral-content text-center">
            <div>
              <h1 className="lg:max-w-[40vw] mb-5 lg:text-6xl md:text-[5vw] text-[6vw] font-extrabold">
                HIMPUNAN PENGUSAHA MUDA INDONESIA
              </h1>
              <div className="flex justify-center">
                <p className="lg:max-w-[35vw] lg:text-base md:text-[2vw] text-[2.5vw]">
                  <b>Himpunan Pengusaha Muda Indonesia</b> atau biasa dikenal
                  dengan <b>HIPMI</b> merupakan sebuah organisasi independen
                  yang merupakan kumpulan para pengusaha muda Indonesia yang
                  bergerak dalam bidang perekonomian. Organisasi ini merupakan
                  sebuah organisasi non-partisan yang mulai didirikan pada
                  tanggal 19 Juni 1972.
                </p>
              </div>
            </div>
          </div>
        </Hero>
      </div>

      <div className="text-center">
        <h1 className="text-4xl font-extrabold">Kegiatan Terkini</h1>
        <p className="mt-4 text-md">Apa saja yang terjadi pada bulan ini</p>
        <div className="flex flex-wrap justify-center gap-10 mt-[5vh]">
          <Suspense
            fallback={
              <div
                className="flex justify-center items-center w-full h-[50vh]"
                data-aos="fade-up"
              >
                <div className="loading loading-lg" />
                <p className="text-2xl ms-5">Memuat kegiatan terbaru...</p>
              </div>
            }
          >
            {(!activities ||
              (Array.isArray(activities) && activities.length === 0)) && (
              <div
                className="flex justify-center items-center w-full h-[12vh]"
                data-aos="fade-up"
              >
                <p className="text-2xl">Belum ada kegiatan terbaru</p>
              </div>
            )}

            {activities &&
              Array.isArray(activities) &&
              activities.length > 0 &&
              activities.map((activity: ActivityDataProp, index: number) => (
                <div
                  data-aos="fade-up"
                  data-aos-delay={`${index * 150}`}
                  key={`data-${Math.floor(
                    Math.random() * 4 + 1
                  )}-berita-terkini-${index}`}
                  className="card bg-base-100 lg:w-[18vw] shadow-xl"
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
                        <span className="lg:text-md text-sm w-full">{convertDateToLocaleString(activity.created_at) || ""}</span>
                      </div>
                    </div>
                    <h2 className="card-title mt-3 font-extrabold text-start">
                      <Link href={route('activity.show', activity.slug)}>
                        {activity.title}
                      </Link>
                    </h2>
                    <p className="text-start text-sm">{activity.content}</p>
                    <div className="card-actions justify-end">
                      <Link
                        href={route('activity.show', activity.slug)}
                        className="btn bg-custom-yellow dark:text-neutral text-base h-[2vh] mt-[3vh] font-bold lg:text-base"
                      >
                        Selengkapnya
                      </Link>
                    </div>
                  </div>
                </div>
              ))}
          </Suspense>
        </div>
      </div>

      <div className="flex mt-12 min-h-[80vh]">
        <div className="hero">
          <div className="flex lg:flex-row flex-col hero-content justify-between lg:gap-1 gap-[25vw]">
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
              <Link
                href={route('about')}
                className="btn bg-custom-yellow dark:text-neutral text-base mt-[4vh] font-bold"
              >
                Selengkapnya
              </Link>
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

      <div className="mt-12 text-center">
        <h1 className="lg:text-4xl text-2xl font-extrabold" data-aos="fade-up">
          Kalender HIPMI PT Telkom Purwokerto
        </h1>
        <div className="flex flex-wrap justify-center gap-10 mt-[5vh] mb-[12vh]">
          <Suspense
            fallback={
              <div
                className="flex justify-center items-center w-full h-[50vh]"
                data-aos="fade-up"
              >
                <div className="loading loading-lg" />
                <p className="text-2xl ms-5">Memuat kalender hipmi...</p>
              </div>
            }
          >
            <div className="flex justify-center items-center min-h-[65vh] min-w-full">
              <Calender
                loading="lazy"
                data-aos="fade-up"
                src="https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Asia%2FJakarta&bgcolor=%23ffffff&title=Kalender%20HIPMI%20TUP&src=Y18xYzIyZWUwN2YzMmQ4ZDg3OTk2N2M4N2MyMmFkODllYzQ5ZjdiNzhiMjM2NzZkMTY4MWJjZGYwZDUyN2RlMzYxQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%239E69AF&color=%234285F4"
              />
            </div>
          </Suspense>
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
  <LandingLayout title="Beranda" children={page} />
);

export default Home;
