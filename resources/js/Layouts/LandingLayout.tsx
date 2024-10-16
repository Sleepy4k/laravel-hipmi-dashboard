import { Head } from '@inertiajs/react';
import NavBar from './partials/Landing/Navbar';
import ScrollToTop from './partials/Landing/ScrollToTop';
import Footer from './partials/Landing/Footer';

interface LandingLayoutProps {
  title?: string;
  children: React.ReactNode;
}

export default function LandingLayout({ title, children }: LandingLayoutProps) {
  return (
    <>
      <Head title={title} />
      {/**
       * We need to scroll the content of the page, not the whole page.
       * So we need to add `scroll-region="true"` to the div below.
       *
       * [Read more](https://inertiajs.com/pages#scroll-regions)
       */}
      <div
        className="w-full overflow-hidden overflow-y-auto min-h-screen flex flex-col justify-between"
        scroll-region="true"
      >
        <NavBar />
        <div className='lg:mt-[8vh] mt-[5rem] flex justify-center gap-0 pt-5 mb-auto'>
          {children}
        </div>
        <ScrollToTop />
        <Footer />
      </div>
    </>
  );
}
