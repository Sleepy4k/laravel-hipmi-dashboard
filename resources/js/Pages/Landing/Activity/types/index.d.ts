import { PaginatedData } from "@/types";

export type ImageBody = {
  url: string;
};

export type ActivityData = {
  slug: string;
  title: string;
  thumbnail: string | null;
  created_at: string;
};

export type ActivityDataProp = ActivityData & {
  content: string;
};

export type FullActivityDataProp = ActivityDataProp & {
  images: ImageBody[];
};

export type HomePageProp = {
  activities: PaginatedData<ActivityDataProp>;
};

export type ShowPageProp = {
  data: FullActivityDataProp;
  latest: ActivityData[];
};

export type LatestActivityProp = {
  activities: ActivityData[];
};

export type DetailActivityProp = {
  activity: FullActivityDataProp;
};
