export default function save(props) {
	const { attributes } = props;
	const { name, nature, description, role, tools, scope } = attributes;

	return (
		<div className='intro__container'>
			<div className='intro__inner-section'>
				<h2 className='intro__nature roboto'>{nature}</h2>
				<h1 className='intro__name playfair-display'>{name}</h1>
				<p className='intro__description roboto'>{description}</p>
			</div>
			<div className='intro__inner-section'>
				<p className='intro__details roboto'><span>Role:</span> {role}</p>
				<p className='intro__details roboto'><span>Tools:</span> {tools}</p>
				<p className='intro__details roboto'><span>Scope:</span> {scope}</p>
			</div>
		</div>
	);
}
