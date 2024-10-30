import { Link } from "@inertiajs/react";
import { PreviewAboutProp } from "../types";

export default function PreviewAbout({ about }: PreviewAboutProp) {
  const initialState = {
    kabinet: "",
    description: null,
  };

  const { kabinet, description } = about.reduce((acc, item) => {
    switch (item.key) {
      case "kabinet":
        acc.kabinet = item.value;
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
    <div className="flex mt-14 min-h-[80vh] bg-gray-100 shadow-lg rounded-2xl">
      <div className="hero">
        <div className="flex lg:flex-row flex-col hero-content justify-between lg:gap-1 gap-[25vw]">
          <div data-aos="fade-up">
            <h1 className="text-lg font-bold mb-[5vh]">Tentang Kami</h1>
            <h1 className="lg:text-5xl text-3xl font-extrabold max-w-[13vw]">
              {kabinet || "Kabinet Danartapura"}
            </h1>
            <p
              className="py-6 lg:w-[32vw] mt-[4vh]"
              dangerouslySetInnerHTML={{ __html: description || "-" }}
            />
            <Link
              href={route("about")}
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
  );
}
