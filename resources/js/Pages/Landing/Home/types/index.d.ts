import { LandingDataStruct } from "@/types";

export type ActivityDataProp = {
  slug: string;
  title: string;
  content: string;
  thumbnail: string | null;
  created_at: string;
};

export type PreviewAboutProp = {
  about: LandingDataStruct[];
};

export type LatestActivityProp = {
  activities: ActivityDataProp[];
};

export type HomePageProp = PreviewAboutProp & LatestActivityProp & {
  data: LandingDataStruct[];
};

export type BannerProp = {
  banner: string;
  header?: string | null;
  description?: string | null;
};
