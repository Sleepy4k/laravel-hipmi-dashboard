import { Hero } from "./StyledTag";

type BannerProp = {
  banner: string;
  header?: string | null;
  description?: string | null;
};

export default function Banner({ banner, header, description }: BannerProp) {
  return (
    <div className="lg:min-h-[80vh] min-h-[25rem]">
      <Hero banner={banner} className="hero lg:h-[65vh] h-[20rem] bg-center bg-cover bg-no-repeat bg-opacity-50 rounded-3xl overflow-hidden">
        <div className="hero-overlay bg-opacity-80" />
        <div className="her-content text-neutral-content text-center">
          <div data-aos="fade-up">
            <h1
              dangerouslySetInnerHTML={{
                __html: header
                  ? header.toUpperCase()
                  : "HIMPUNAN PENGUSAHA MUDA INDONESIA",
              }}
              className="lg:max-w-[40vw] mb-5 lg:text-6xl md:text-[5vw] text-[6vw] font-extrabold"
            />
            <div className="flex justify-center">
              <p
                dangerouslySetInnerHTML={{ __html: description || "-" }}
                className="lg:max-w-[35vw] lg:text-base md:text-[2vw] text-[2.5vw]"
              />
            </div>
          </div>
        </div>
      </Hero>
    </div>
  );
}
