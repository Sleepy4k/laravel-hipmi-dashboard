import { AppSetting } from "@/types";
import { Link, usePage } from "@inertiajs/react";
import classNames from "classnames";

export default function NavBar() {
  const { logo } = usePage<{ app: AppSetting }>().props.app;

  const handleActive = (url: string[]) => {
    const isActive = url?.includes(route().current() as string);

    const textClasses = classNames({
      "text-white active": isActive,
      "text-gray-800 group-hover:text-white": !isActive,
    });

    return textClasses;
  };

  return (
    <div className="fixed navbar bg-base-100 z-50 flex justify-center">
      <div className="navbar w-[85vw]">
        <div className="navbar-start">
          <Link href={route("landing")} className="btn btn-ghost">
            <img
              src={logo}
              loading="lazy"
              alt="App Banner Logo"
              className="lg:h-[2.5rem] h-9"
            />
          </Link>
        </div>
        <div className="navbar-center hidden lg:flex">
          <ul className="menu menu-horizontal px-1 lg:text-md gap-2">
            <li>
              <Link
                href={route("landing")}
                className={handleActive(["landing"])}
              >
                Home
              </Link>
            </li>
            <li>
              <details>
                <summary>
                  <Link href={route("about")}>Tentang HIPMI</Link>
                </summary>
                <ul className="p-2">
                  <li>
                    <Link
                      href={route("about.pt")}
                      className={handleActive(["about.pt"])}
                    >
                      HIPMI PT
                    </Link>
                  </li>
                  <li>
                    <Link
                      href={route("about.bpc")}
                      className={handleActive(["about.bpc"])}
                    >
                      HIPMI BPC
                    </Link>
                  </li>
                </ul>
              </details>
            </li>
            <li>
              <Link
                href={route("activity")}
                className={handleActive(["activity"])}
              >
                Kegiatan
              </Link>
            </li>
            <li>
              <Link
                href={route("article")}
                className={handleActive(["article"])}
              >
                Artikel
              </Link>
            </li>
            <li>
              <Link
                href={route("product")}
                className={handleActive(["product"])}
              >
                Produk
              </Link>
            </li>
            <li>
              <Link href={route("member")} className={handleActive(["member"])}>
                Anggota
              </Link>
            </li>
          </ul>
        </div>
        <div className="navbar-end">
          <div className="hidden lg:block relative rounded-2xl overflow-hidden h-[3rem] w-[5rem]">
            <Link
              href={route("login")}
              className="btn btn-block bg-custom-yellow dark:text-neutral lg:text-md"
            >
              Masuk
            </Link>
          </div>
          <div className="dropdown dropdown-end">
            <div
              title="Menu"
              tabIndex={0}
              role="button"
              className="btn btn-ghost lg:hidden me-[1.5rem]"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M4 6h16M4 12h8m-8 6h16"
                />
              </svg>
            </div>
            <ul
              tabIndex={0}
              className="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow gap-2"
            >
              <li>
                <Link
                  href={route("landing")}
                  className={handleActive(["landing"])}
                >
                  Home
                </Link>
              </li>
              <li>
                <Link href={route("about")} className={handleActive(["about"])}>
                  Tentang HIPMI
                </Link>
                <ul className="p-2">
                  <li>
                    <Link
                      href={route("about.pt")}
                      className={handleActive(["about.pt"])}
                    >
                      HIPMI PT
                    </Link>
                  </li>
                  <li>
                    <Link
                      href={route("about.bpc")}
                      className={handleActive(["about.bpc"])}
                    >
                      HIPMI BPC
                    </Link>
                  </li>
                </ul>
              </li>
              <li>
                <Link
                  href={route("activity")}
                  className={handleActive(["activity"])}
                >
                  Kegiatan
                </Link>
              </li>
              <li>
                <Link
                  href={route("article")}
                  className={handleActive(["article"])}
                >
                  Artikel
                </Link>
              </li>
              <li>
                <Link
                  href={route("product")}
                  className={handleActive(["product"])}
                >
                  Produk
                </Link>
              </li>
              <li>
                <Link
                  href={route("member")}
                  className={handleActive(["member"])}
                >
                  Anggota
                </Link>
              </li>
              <li>
                <Link href={route("login")}>Masuk</Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  );
}
