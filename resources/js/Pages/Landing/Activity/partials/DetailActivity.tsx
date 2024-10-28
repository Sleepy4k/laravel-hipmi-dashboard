import { convertDateToLocaleString } from "@/utils/parse";
import { Calendar } from "lucide-react";

type ImageBody = {
  url: string;
};

type ActivityDataProp = {
  slug: string;
  title: string;
  thumbnail: string | null;
  created_at: string;
};

type ActivityData = ActivityDataProp & {
  content: TrustedHTML;
  images: ImageBody[];
};

type DetailActivityProp = {
  activity: ActivityData;
};

export default function DetailActivity({ activity }: DetailActivityProp) {
  return (
    <div className="w-full md:w-2/3 p-4">
      <div className="blog-post">
        <div className="md:w-[48vw] w-full md:h-[50vh] mb-8 overflow-hidden">
          <img
            data-aos="fade-left"
            src={activity.thumbnail || ""}
            alt="Thumbnail Kegiatan"
            loading="lazy"
            className="w-full h-full rounded-lg mb-4"
          />
        </div>
      </div>

      <div className="gallery-images">
        <ul className="flex flex-wrap gap-2">
          {activity.images &&
            activity.images.length > 0 &&
            activity.images.map((image: ImageBody, index: number) => (
              <li data-aos="fade-left" data-aos-delay={`${index * 250}`}>
                <img
                  src={image.url || ""}
                  loading="lazy"
                  alt={`gallery-image-${index + 1}`}
                  className="w-16 h-16 rounded-lg"
                />
              </li>
            ))}
        </ul>
      </div>

      <h4 className="text-2xl font-semibold mt-8" data-aos="fade-up">
        {activity.title}
      </h4>

      <div className="flex items-center mt-2" data-aos="fade-up">
        <Calendar />
        <span className="ml-2">
          {convertDateToLocaleString(activity.created_at)}
        </span>
      </div>

      <p
        data-aos="fade-up"
        className="mt-6"
        dangerouslySetInnerHTML={{ __html: activity.content || "" }}
      />
    </div>
  );
}
