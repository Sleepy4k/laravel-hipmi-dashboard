import MainLayout from "@/Layouts/MainLayout";

function Show() {
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
Show.layout = (page: React.ReactNode) => (
  <MainLayout title="Show Activity" children={page} />
);

export default Show;
