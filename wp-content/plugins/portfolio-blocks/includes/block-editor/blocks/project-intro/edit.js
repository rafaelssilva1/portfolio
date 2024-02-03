import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl, TextareaControl } from '@wordpress/components';
import './editor.scss';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	const { name, nature, description, role, scope, tools } = attributes;

	const blockProps = useBlockProps({
		className: 'intro__container'
	});

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Project')}>
					<b>Name</b>
					<TextControl
						value={name || ''}
						onChange={(name) => setAttributes({ name })}
					/>
					<b>Nature</b>
					<TextControl
						value={nature || ''}
						onChange={(nature) => setAttributes({ nature })}
					/>
					<b>Description</b>
					<TextareaControl
						value={description || ''}
						onChange={(description) => setAttributes({ description })}
					/>
					<b>Role</b>
					<TextControl
						value={role || ''}
						onChange={(role) => setAttributes({ role })}
					/>
					<b>Tools</b>
					<TextControl
						value={tools || ''}
						onChange={(tools) => setAttributes({ tools })}
					/>
					<b>Scope</b>
					<TextControl
						value={scope || ''}
						onChange={(scope) => setAttributes({ scope })}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
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
		</>
	);
}
