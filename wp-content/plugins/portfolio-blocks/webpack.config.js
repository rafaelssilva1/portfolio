const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
	...defaultConfig,
	entry: {
		'project-intro': './includes/block-editor/blocks/project-intro',
		'project-image': './includes/block-editor/blocks/project-image',
		'project-details': './includes/block-editor/blocks/project-details',
		'project-featured': './includes/block-editor/blocks/project-featured',
	},
};
