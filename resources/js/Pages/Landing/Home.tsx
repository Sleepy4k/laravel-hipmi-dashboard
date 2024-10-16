import LandingLayout from "@/Layouts/LandingLayout";

function Home() {
  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <div className="lg:min-h-[80vh] min-h-[25rem]">
        <div className="hero lg:h-[65vh] h-[20rem] bg-center bg-cover bg-no-repeat bg-opacity-50 rounded-3xl overflow-hidden">
          <div className="hero-overlay bg-opacity-80" />
          <div className="her-content text-neutral-content text-center">
            <div>
              <h1 className="lg:max-w-[50vw] mb-5 lg:text-6xl md:text-[5vw] text-[6vw] font-extrabold">
                HIMPUNAN PENGUSAHA
                <br />
                MUDA INDONESIA
              </h1>
              <div className="flex justify-center">
                <p className="lg:max-w-[25vw] lg:text-base md:text-[2vw] text-[2.5vw]">
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
Home.layout = (page: React.ReactNode) => <LandingLayout children={page} />;

export default Home;
