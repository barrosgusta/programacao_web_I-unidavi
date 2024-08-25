export default function PostCard() {
    return (
        <div className="inset-0 flex justify-center shadow-xl">
            <div className="border p-7 rounded-lg w-full">
                <div className="mb-4 flex gap-5">
                    <div className="rounded-full aspect-square w-12 border">
                        <img src="https://picsum.photos/200" className="w-full object-content rounded-full" alt="Imagem" />
                    </div>
                    <div className="flex flex-col justify-between">
                        <h2>
                            Nome do usuário
                        </h2>
                        <p>
                            1h
                        </p>
                    </div>
                </div>
                <h3>
                    Nova foto....
                </h3>
                <div className="border aspect-square rounded-lg overflow-hidden m-2 mb-4">
                    <img src="https://picsum.photos/500" className="w-full object-content" alt="Imagem" />
                </div>
                <div className="flex gap-8">
                    <button className="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        👍🏻
                    </button>
                </div>
            </div>
        </div>
    )
}