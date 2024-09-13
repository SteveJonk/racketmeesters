function addShadowSupport(settings, name) {
  // Bail early if the block does not have supports.
  if (!settings?.supports) {
    return settings;
  }

  // Only apply to Group blocks.
  if (name === 'core/group') {
    return Object.assign({}, settings, {
      supports: Object.assign(settings.supports, {
        shadow: true,
      }),
    });
  }

  return settings;
}

window.wp.hooks.addFilter(
  'blocks.registerBlockType',
  'modify-block-supports/add-shadow-support',
  addShadowSupport
);
