import { ArrowUp } from "lucide-react";
import { useState, useEffect } from "react";

export default function ScrollToTop() {
  const MIN_TO_SCROLL_TOP = 250;
  const [isScrollDisabled, setIsScrollDisabled] = useState<boolean>(false);

  useEffect(() => {
    const handleScroll = () => {
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      setIsScrollDisabled(scrollTop > MIN_TO_SCROLL_TOP);
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const handleScrollToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  return (
    <div
      hidden={!isScrollDisabled}
      onClick={handleScrollToTop}
      className="fixed bottom-5 right-5 z-50 animate-bounce transition ease-in-out delay-500"
    >
      <button type="button" className="btn btn-circle bg-custom-yellow">
        <ArrowUp color="black" />
      </button>
    </div>
  );
}
