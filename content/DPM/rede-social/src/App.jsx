import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import githubLogo from "./assets/github.svg";
import Header from "./components/Header";
import Footer from "./components/Footer";
import MainPage from "./Pages/MainPage";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import SupportPage from "./Pages/SupportPage";
import About from "./Pages/About";
import LicensesPage from "./Pages/LicensesPage";

export default function App() {
  return (
    <Router className="">
      <Header />
      <section
        className="min-h-screen w-full grid content-center gap-2 sm:px-28 xl:px-64 lg:px-40 py-20 px-10"
      >
        <Routes>
          <Route path="/" element={<MainPage />} />
          <Route path="/support" element={<SupportPage />} />
          <Route path="/about" element={<About />} />
          <Route path="/licenses" element={<LicensesPage />} />
        </Routes>
      </section>
      <Footer />
    </Router>
  );
}