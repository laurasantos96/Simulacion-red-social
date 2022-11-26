

    import { createPopper } from '@popperjs/core';

    const popcorn = document.querySelector('#imgmuro');
    const tooltip = document.querySelector('#tooltip');

    createPopper(popcorn, tooltip, {
      placement: 'bottom',
      modifiers: [
        {
          name: 'offset',
          options: {
            offset: [0, 8],
          },
        },
      ],
    });



 