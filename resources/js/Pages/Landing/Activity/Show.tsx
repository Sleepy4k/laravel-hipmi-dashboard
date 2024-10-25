import LandingLayout from "@/Layouts/LandingLayout";
import { LandingDataStruct } from "@/types";
import { convertDateToLocaleString } from "@/utils/parse";
import { Link } from "@inertiajs/react";
import { Calendar } from "lucide-react";

type ImageBody = {
  url: string;
};

type ActivityData = {
  slug: string;
  title: string;
  content: TrustedHTML;
  created_at: string;
  thumbnail: string;
  images: ImageBody[];
};

type ShowPageProp = {
  data: ActivityData;
  latest: LandingDataStruct[];
};

function Show({ data, latest }: ShowPageProp) {
  console.log(data);

  return (
    // <div dangerouslySetInnerHTML={{  __html: data.content  }} />
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <div className="max-w-[80%] mx-auto p-4">
        <header className="text-center mb-8">
          <h1 className="text-3xl font-bold">
            Kegiatan
          </h1>
        </header>
        <main className="flex flex-wrap md:flex-nowrap gap-8">
          <div className="w-full md:w-[100%]">
            <img
              src="https://i.ibb.co/jL501fG/IMG-20230715-WA0000.jpg"
              alt="Event Image"
              className="w-full h-[55vh] rounded-3xl mb-4"
              height={50}
            />
            <h2 className="text-2xl font-semibold">{data.title}</h2>
            <div className="flex inline-block mt-4 mr-6">
              <Calendar />
              <span className="mt-1">{convertDateToLocaleString(data.created_at)}</span>
            </div>
            <p className="mt-4" dangerouslySetInnerHTML={{  __html: data.content  }} />
          </div>
          <aside className="w-full md:w-[45%] h-auto">
            <div className="bg-gray-100 p-4 rounded-lg shadow-md">
              <h3 className="text-xl font-semibold mb-4">Kegiatan Terbaru</h3>
              <ul>
                {latest && latest.length > 0 && latest.map((news, index) => (
                  <li className="flex mb-4 gap-5" key={index}>
                    <img
                      src={news.thumbnail}
                      alt="Event Image"
                      className="rounded-lg mb-4"
                      height={60}
                      width={80}
                    />
                    <div>
                      <p className="mt-1 w-[10vw]">
                        <Link
                          href={route('activity.show', news.slug)}
                        >
                          {news.title}
                        </Link>
                      </p>
                      <p className="mt-2 text-sm">
                        {convertDateToLocaleString(news.created_at)}
                      </p>
                    </div>
                  </li>
                ))}
              </ul>
            </div>
          </aside>
        </main>
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
