import { Link } from "react-router-dom";

export default function Header() {
    return (
        <header className="fixed inset-0 top-0 p-5 border-b-2 bg-red-500 h-fit flex justify-center">
            <Link
                className="font-bold transition-all hover:scale-110 hover:text-red-800"
                to="/"
            >
                REDE SOCIAL
            </Link>
        </header>
    )
}