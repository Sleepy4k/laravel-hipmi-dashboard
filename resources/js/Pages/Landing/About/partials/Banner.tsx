type BannerProp = {
  kabinet: string | null;
  description: string | null;
};

export default function Banner({ kabinet, description }: BannerProp) {
  return (
    <div className="flex min-h-[55vh] mb-12 bg-gray-100 shadow-lg rounded-2xl">
      <div className="hero">
        <div className="flex flex-col lg:flex-row hero-content justify-between lg:gap-1 gap-[25vw]">
          <div data-aos="fade-up">
            <h1 className="text-lg font-bold mb-[5vh]">Tentang Kami</h1>
            <h1 className="lg:text-5xl text-3xl font-extrabold max-w-[13vw]">
              {kabinet || "Kabinet Danartapura"}
            </h1>
            <p
              className="py-6 lg:w-[32vw] mt-[4vh]"
              dangerouslySetInnerHTML={{ __html: description || "-" }}
            />
          </div>
          <div
            data-aos="fade-left"
            className="flex lg:flex-row flex-col lg:mt-[8vh] lg:mb-1 mb-[12vh] lg:ms-[14vw] lg:h-[18vh] lg:w-full w-[10rem]"
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
  );
}
