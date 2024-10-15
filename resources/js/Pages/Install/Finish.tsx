import axios from "axios";
import { useEffect } from "react";
import { PageProps } from "@/types";
import InstallationLayout from "@/Layouts/InstallationLayout";

type FinishProps = PageProps<{
  phpExecutable: string;
  base_url: string;
  base_path: string;
  link_url: string;
  minPhpVersion: string;
  user: {
    name: string;
  };
}>;

export default function Finish({
  user,
  errors,
  base_url,
  link_url,
  base_path,
  phpExecutable,
  minPhpVersion,
}: FinishProps) {
  const redirectHome = () => (window.location.href = base_url);

  useEffect(() => {
    axios
      .post(link_url, { step: 5 })
      .then(() => {})
      .catch(() => {});
  }, []);

  return (
    <InstallationLayout step={5} errors={errors} title="Finish">
      <div className="p-3">
        <h4 className="my-5 text-lg font-semibold text-neutral-800">
          Installation Successfull
        </h4>

        <p className="text-neutral-700">
          <span className="font-semibold">{`${
            import.meta.env.VITE_APP_NAME
          } has been successfully installed`}</span>
          , if you want to add data dummy to the database, you can run the
          command below:
        </p>

        <div className="mt-4 mb-3 block w-full dark:text-black rounded-md border border-neutral-300 bg-neutral-50 py-4 px-5 text-base shadow-sm">
          <span className="select-all">{` ${
            phpExecutable || "php"
          } ${base_path}\\artisan db:seed`}</span>
        </div>

        <p className="mt-4 text-neutral-700">
          If you are not certain on how to configure the database seeder with
          the minimum required PHP version ({minPhpVersion}), the best is to
          consult with experienced laravel developers.
        </p>

        <h4 className="mt-5 mb-2 text-lg font-semibold text-neutral-800">
          Setting up Task Scheduler
        </h4>

        <p className="text-neutral-700">
          To run the scheduler, you should add the following Cron entry to your
          server:
        </p>

        <div className="mt-4 mb-3 block w-full dark:text-black rounded-md border border-neutral-300 bg-neutral-50 py-4 px-5 text-base shadow-sm">
          {"* * * * * "}
          <span className="select-all">{` ${
            phpExecutable || "php"
          } ${base_path}\\artisan schedule:run >> /dev/null 2>&1`}</span>
        </div>

        <p className="text-neutral-700">
          This Cron will call the Laravel command scheduler every minute. When
          the schedule:run command is executed, Laravel will evaluate your
          scheduled tasks and runs the tasks that are due.
        </p>

        <h4 className="mt-5 mb-2 text-lg font-semibold text-neutral-800">
          Admin Credentials
        </h4>

        <p>
          <span className="font-semibold text-neutral-700">{"Name: "}</span>
          <span className="select-all dark:text-black">{user.name || "-"}</span>
          <br />
          <span className="font-semibold text-neutral-700">{"Role: "}</span>
          <span className="select-all dark:text-black">Super Admin</span>
          <br />
          <span className="font-semibold text-neutral-700">{"Password: "}</span>
          <span className="dark:text-black">your chosen password</span>
        </p>

        <div className="-m-7 mt-6 rounded-b border-t border-neutral-200 bg-neutral-50 p-4 px-10 text-right">
          <button
            type="button"
            onClick={redirectHome}
            className="inline-flex items-center rounded-md border border-transparent bg-primary-600 px-4 py-2 text-sm text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 hover:bg-primary-700"
          >
            Home
          </button>
        </div>
      </div>
    </InstallationLayout>
  );
}
