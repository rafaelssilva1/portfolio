import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl, TextareaControl, Button } from '@wordpress/components';
import './editor.scss';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	const { title, description, details } = attributes;
	const blockProps = useBlockProps();

	const handleAddDetails = () => {
		const detailsList = [...details];
		detailsList.push({
			title: '',
			description: ''
		})

		setAttributes({ details: detailsList })
	}

	const handleEditDetails = ({ text, key, index }) => {
		const detailsList = [...details];
		const currentItem = detailsList[index];

		currentItem[key] = text;

		setAttributes({ details: detailsList })
	}

	const handleDeleteDetails = ({ index }) => {
		const detailsList = [...details];
		detailsList.splice(index);

		setAttributes({ details: detailsList });
	}

	const renderDetailsControls = details.length ? details.map((_, index) => (
		<div key={index}>
			<div className='editor__container'><b>Details {index + 1}</b><Button isDestructive onClick={() => handleDeleteDetails({ index })}>Delete</Button></div>
			<TextControl
				value={details[index].title || ''}
				onChange={(title) => handleEditDetails({ text: title, key: 'title', index })}
			/>
			<TextareaControl
				value={details[index].description || ''}
				onChange={(description) => handleEditDetails({ text: description, key: 'description', index })}
			/>
		</div>
	)) : null;

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Project Details')}>
					<b>Description</b>
					<TextareaControl
						value={description || ''}
						onChange={(description) => setAttributes({ description })}
					/>
					<PanelBody title={__('Details List')}>
						{renderDetailsControls}
						<Button
							variant='primary'
							onClick={() => handleAddDetails()}>
							Add details
						</Button>
					</PanelBody>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
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
		</>
	);
}
