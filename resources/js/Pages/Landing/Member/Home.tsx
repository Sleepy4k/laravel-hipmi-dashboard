import LandingLayout from "@/Layouts/LandingLayout";

function Home() {
  return (
    <div className="w-[85%] h-full px-4 xl:px-4 2xl:px-5 xl:py-2 overflow-clip">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
        asperiores adipisci dicta odit amet modi, cupiditate earum distinctio.
        Reiciendis nemo eos, sit quae voluptas iste debitis, culpa blanditiis
        odit adipisci eaque repellat voluptates vel praesentium ullam nihil!
        Dolore vel, ut ad modi veritatis voluptatem odio laborum esse. Obcaecati
        officia inventore qui mollitia natus ab voluptate minus facilis beatae
        itaque cupiditate dolores dignissimos autem magni labore sunt repellat,
        ad eaque animi? Ratione explicabo iusto obcaecati temporibus sit
        necessitatibus veniam vitae eum, ipsam quia est tempore. Accusantium
        veniam commodi laudantium perferendis, quibusdam eum beatae repellat
        vitae aspernatur, magni provident aperiam doloribus placeat minima,
        molestiae maxime ipsa repudiandae quas optio at ducimus. Ipsam saepe
        debitis quibusdam molestias dolores a esse incidunt veritatis ipsa?
      </p>
    </div>
  );
}

/**
 * Persistent Layout (Inertia.js)
 *
 * [Learn more](https://inertiajs.com/pages#persistent-layouts)
 */
Home.layout = (page: React.ReactNode) => (
  <LandingLayout title="Anggota" children={page} />
);

export default Home;
