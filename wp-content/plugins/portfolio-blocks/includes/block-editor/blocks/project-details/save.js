export default function save(props) {
	const { attributes } = props;
	const { description, details } = attributes;

	return (
		<div>
			{description && <p className='details__featured-text roboto'>{description}</p>}
			<div className='details__list'>
				{details.length ? details.map(({ title, description }, index) => (
					<div key={index} className='details__item'>
						<h3 className='details__title roboto'>{title}</h3>
						<p className='details__description roboto'>{description}</p>
					</div>
				)) : null}
			</div>
		</div>
	);
}
