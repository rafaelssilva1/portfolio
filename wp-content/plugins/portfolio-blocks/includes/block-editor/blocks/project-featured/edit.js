import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl, ColorPicker } from '@wordpress/components';
import './editor.scss';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	const { title, subtitle, backgroundColor } = attributes;

	const blockProps = useBlockProps({
		className: 'featured__container'
	});

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Featured Text')}>
					<b>Title</b>
					<TextControl
						value={title || ''}
						onChange={(title) => setAttributes({ title })}
					/>
					<b>Subtitle</b>
					<TextControl
						value={subtitle || ''}
						onChange={(subtitle) => setAttributes({ subtitle })}
					/>
					<b>Background Color</b>
					<ColorPicker
						color={backgroundColor}
						onChange={(backgroundColor) => setAttributes({ backgroundColor })}
						enableAlpha
						defaultValue={backgroundColor}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps} style={{ backgroundColor }}>
				<h4 className='featured__subtitle roboto'>{subtitle}</h4>
				<h3 className='featured__title playfair-display'>{title}</h3>
			</div>
		</>
	);
}
