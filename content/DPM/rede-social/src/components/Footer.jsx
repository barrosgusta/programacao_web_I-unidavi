import { Link } from "react-router-dom";

export default function Footer() {
    return (
        <footer className="p-4 h-fit border-t">
            <div className="grid grid-cols-2 justify-between text-sm">
                <div className="grid grid-cols-1 w-full">
                    <Link
                        className="text-center transition-all hover:text-gray-700"
                        to="/support"
                    >
                        Suporte
                    </Link>
                    <Link
                        className="text-center transition-all hover:text-gray-700"
                        to="/licenses"
                    >
                        Licenças
                    </Link>
                    <Link
                        className="text-center transition-all hover:text-gray-700"
                        to="/about"
                    >
                        Quem somos
                    </Link>
                </div>
                <div className="grid grid-cols-1 w-full justify-center items-center">
                    <p className="text-center font-bold">
                        Made with ❤️ by <a href="https://barrosgusta.netlify.app/home" className="text-blue-500">Gustavo Barros</a>
                    </p>
                </div>
            </div>
        </footer>
    )
}