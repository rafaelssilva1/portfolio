export default function save(props) {
	const { attributes } = props;
	const { title, subtitle, backgroundColor } = attributes;

	return (
		<div className="featured__container" style={{ backgroundColor }}>
			<h4 className='featured__subtitle roboto'>{subtitle}</h4>
			<h3 className='featured__title playfair-display'>{title}</h3>
		</div>
	);
}
