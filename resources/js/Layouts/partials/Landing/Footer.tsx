import { AppSetting } from "@/types";
import { Link, usePage } from "@inertiajs/react";

export default function Footer() {
  const { logo } = usePage<{ app: AppSetting }>().props.app;

  return (
    <div className="bg-base-200">
      <footer className="footer text-base-content p-10 w-[75%] lg:ms-[20vw] ms-[10vw]">
        <aside className="lg:max-w-[15vw]">
          <div className="flex justify-center lg:gap-3 gap-2.5">
            <Link href={route("landing")} className="btn btn-ghost">
              <img
                src={logo}
                loading="lazy"
                alt="App Banner Logo"
                className="lg:h-[2.5rem] h-9"
              />
            </Link>
          </div>
          <p className="text-start mt-5 font-extrabold">Connect with us</p>
          <a
            href="https://www.instagram.com/hipmi.ittp"
            title="Instagram Profile"
            target="_blank"
            rel="noopener"
          >
            <span className="ct-icon-container">
              <svg
                width={20}
                height={20}
                viewBox="0 0 20 20"
                aria-hidden="true"
              >
                <circle cx={10} cy={10} r="3.3" />
                <path d="M14.2,0H5.8C2.6,0,0,2.6,0,5.8v8.3C0,17.4,2.6,20,5.8,20h8.3c3.2,0,5.8-2.6,5.8-5.8V5.8C20,2.6,17.4,0,14.2,0zM10,15c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S12.8,15,10,15z M15.8,5C15.4,5,15,4.6,15,4.2s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8S16.3,5,15.8,5z" />
              </svg>
            </span>
          </a>
        </aside>
        <nav className="lg:max-w-[15vw]">
          <h6 className="footer-title font-extrabold">Site Menu</h6>
          <Link
            href={route("activity")}
            preserveScroll
            className="link link-hover"
          >
            Kegiatan
          </Link>
          <Link
            href={route("article")}
            preserveScroll
            className="link link-hover"
          >
            Artikel
          </Link>
          <Link
            href={route("product")}
            preserveScroll
            className="link link-hover"
          >
            Produk
          </Link>
          <Link
            href={route("member")}
            preserveScroll
            className="link link-hover"
          >
            Anggota
          </Link>
        </nav>
        <nav className="lg:max-w-[15vw]">
          <h6 className="footer-title font-extrabold">Useful Website</h6>
          <a
            href="https://ittelkom-pwt.ac.id"
            target="_blank"
            rel="noopener"
            className="link link-hover"
          >
            Institut Teknologi Telkom Purwokerto
          </a>
          <a
            href="https://www.hipmijateng.org"
            target="_blank"
            rel="noopener"
            className="link link-hover"
          >
            Beranda | HIPMI Badan Pengurus Daerah (BPD) Jawa Tengah
          </a>
        </nav>
        <nav></nav>
      </footer>
      <footer className="footer text-base-content border-base-300 border-t px-10 py-4 flex justify-center">
        <p className="ms-[4vw] lg:ms-0">
          Copyright © HIPMI PT ITTelkom Purwokerto 2024 | Teknologi Informasi
        </p>
      </footer>
    </div>
  );
}
