export default function save({ attributes }) {
	const { image } = attributes;

	return <div className='image__container'>
		<img className='image__image' src={image.url} alt={image.alt} />
	</div>
}
