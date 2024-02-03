import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps, MediaPlaceholder } from '@wordpress/block-editor';
import { PanelBody } from '@wordpress/components';

export default function Edit(props) {
	const blockProps = useBlockProps({
		className: 'image__container'
	});
	const { attributes, setAttributes } = props;
	const { image } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Project')}>
					<b className='teste'>Image</b>
					<MediaPlaceholder
						icon="format-image"
						labels={{
							title: __('Project Image'),
						}}
						className="block-image"
						onSelect={(image) => { setAttributes({ image }) }}
						accept="image/*"
						allowedTypes={['image']}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
				<img className='image__image' src={image.url} />
			</div>
		</>
	);
}
