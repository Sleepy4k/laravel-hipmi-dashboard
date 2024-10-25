import "./bootstrap";
import "../css/app.css";
import 'aos/dist/aos.css';

import AOS from 'aos';
import { createRoot } from "react-dom/client";
import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

AOS.init({
  duration: 1000,
  easing: 'ease-in-out',
  once: true,
});

// Get app title from meta tag base-title
const appName =
  document.head
    .querySelector('meta[name="base-title"]')
    ?.getAttribute("content") || "Laravel";

createInertiaApp({
  title: (title) => {
    if (!title || title == "") return appName;

    return `${title} - ${appName}`;
  },
  resolve: (name) =>
    resolvePageComponent(
      `./Pages/${name}.tsx`,
      import.meta.glob("./Pages/**/*.tsx")
    ),
  setup({ el, App, props }) {
    const root = createRoot(el);

    root.render(<App {...props} />);
  },
  progress: {
    color: "#F87415",
    showSpinner: true,
  },
});
