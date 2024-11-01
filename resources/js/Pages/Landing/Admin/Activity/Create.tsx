import MainLayout from "@/Layouts/MainLayout";
import { PageProps } from "@/types";
import { Link, useForm } from "@inertiajs/react";
import { FormEventHandler, useEffect } from "react";
import ReactQuill from "react-quill";
import LoadingButton from "@/Components/Button/LoadingButton";
import FieldGroup from "@/Components/Form/FieldGroup";
import TextInput from "@/Components/Form/TextInput";

import "react-quill/dist/quill.snow.css";

function Create({ backUrl }: PageProps<{ backUrl: string }>) {
  const { data, setData, post, processing, reset, errors } = useForm({
    slug: "",
    title: "",
    content: "",
    images: [],
  });

  useEffect(() => {
    if (data.title !== null || data.title == "") setData("title", "");

    setData("slug", data.title.toLowerCase().replace(" ", "-").trim());
  }, [data.title]);

  const handleSubmit: FormEventHandler = (e: any) => {
    e.preventDefault();

    post(route("activities.store"), {
      onSuccess: () => reset(),
    });
  };

  const handleContentChange = (value: string) => {
    setData('content', value);
  }

  const modules = {
    syntax: true,
    toolbar: [
      [{ header: [1, 2, false] }],
      ["bold", "italic", "underline", "strike"],
      [{ list: "ordered" }, { list: "bullet" }, { list: "check" }],
      [{ script: "sub" }, { script: "super" }],
      [{ indent: "-1" }, { indent: "+1" }],
      [{ align: [] }],
      ["blockquote", "code-block"],
      ["image", "video"],
      ["clean"],
    ],
  };

  return (
    <div>
      <div className="flex items-center justify-between mb-6 lg:flex-row flex-col">
        <h1 className="mb-8 text-3xl font-bold">
          <Link
            href={backUrl}
            className="text-indigo-600 hover:text-indigo-700"
          >
            Activity
          </Link>
          <span className="font-medium text-indigo-600"> /</span> Create
        </h1>
        <div className="flex items-center lg:gap-5 gap-1 lg:flex-row flex-col">
          <Link href={backUrl} className="btn-indigo focus:outline-none">
            Back
          </Link>
        </div>
      </div>
      <div className="flex justify between w-full gap-5">
        <div className="w-2/4 bg-white rounded shadow">
          <form onSubmit={handleSubmit}>
            <div className="grid gap-8 p-8 lg:grid-cols-1">
              <FieldGroup label="Title" name="title" error={errors.title}>
                <TextInput
                  name="title"
                  error={errors.title}
                  value={data.title}
                  onChange={(e) => setData("title", e.target.value)}
                />
              </FieldGroup>

              <FieldGroup label="Content" name="content" error={errors.content}>
                <ReactQuill
                  theme="snow"
                  modules={modules}
                  value={data.content}
                  onChange={handleContentChange}
                  placeholder="Describe your activity here..."
                />
              </FieldGroup>
            </div>

            <div className="flex items-center justify-end px-8 py-4 bg-gray-100 border-t border-gray-200">
              <LoadingButton
                loading={processing}
                type="submit"
                className="btn-indigo"
              >
                Create Setting
              </LoadingButton>
            </div>
          </form>
        </div>
        <div className="w-2/4 overflow-hidden bg-white rounded shadow">
          <h2 className="pt-5 ps-5 text-xl">Content Preview</h2>
          <div className="divider w-full h-1 dark:border-neutral dark:bg-neutral" />
          <p
            className="m-6"
            dangerouslySetInnerHTML={{ __html: data.content || 'Describe your activity here...' }}
          />
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
Create.layout = (page: React.ReactNode) => (
  <MainLayout title="Create Activity" children={page} />
);

export default Create;
