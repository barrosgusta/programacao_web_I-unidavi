import PostCard from '../components/PostCard';

export default function MainPage() {
    return (
        <section className="grid grid-cols-1 gap-6 lg:grid-cols-2">
            {PostCard()}
            {PostCard()}
            {PostCard()}
            {PostCard()}
            {PostCard()}
            {PostCard()}
        </section>
    )
}