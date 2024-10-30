import { LandingDataStruct } from "@/types";

export type HomePageProp = {
  data: LandingDataStruct[];
};

export type VisiDataProp = {
  title: string;
  description: string;
};

export type BannerProp = {
  kabinet: string | null;
  description: string | null;
};

export type DataStateType = {
  kabinet: string | null;
  description: string | null;
  visi: VisiDataProp[];
  misi: string | null;
  slogan: string | null;
};
