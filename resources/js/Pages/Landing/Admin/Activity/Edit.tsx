import MainLayout from "@/Layouts/MainLayout";

function Edit() {
  return (
    <div>

    </div>
  );
}

/**
 * Persistent Layout (Inertia.js)
 *
 * [Learn more](https://inertiajs.com/pages#persistent-layouts)
 */
Edit.layout = (page: React.ReactNode) => (
  <MainLayout title="Update Activity" children={page} />
);

export default Edit;
