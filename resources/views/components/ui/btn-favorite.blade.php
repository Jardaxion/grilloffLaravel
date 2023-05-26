<a product="{{ $product->id }}" href="#" class="catalog-item__fav favourite @if(is_favorite($product->id)) _active @endif">
    {{-- <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24.0586 2.02705C21.3194 -0.675344 16.8556 -0.676026 14.1082 2.02705L13.0657 3.05527L12.0184 2.02637C9.27238 -0.674662 4.80858 -0.676025 2.06871 2.02637C0.73318 3.33942 -0.00136089 5.08514 1.89286e-06 6.94125C0.00136468 8.79395 0.736587 10.5349 2.06871 11.8418L12.5621 22.1649C12.6691 22.2698 12.8047 22.3298 12.9471 22.3462C12.9928 22.3557 13.0405 22.3605 13.0875 22.3605C13.2612 22.3605 13.4336 22.2944 13.5651 22.1649L24.0572 11.8425C25.3907 10.5349 26.1259 8.79395 26.1266 6.94125C26.128 5.08514 25.3934 3.33941 24.0586 2.02705ZM23.1026 10.8708L13.0636 20.7469L3.02334 10.8702C1.95355 9.82013 1.36347 8.42532 1.3621 6.94057C1.36142 5.45309 1.95083 4.05283 3.02334 2.99804C3.02334 2.99804 3.02334 2.99804 3.02402 2.99736C4.1306 1.90645 5.58469 1.36065 7.04014 1.36065C8.49628 1.36065 9.95241 1.90645 11.0624 2.99804L12.5771 4.48552C12.5805 4.48892 12.5812 4.49369 12.5853 4.4971L15.3109 7.17701C15.4437 7.30716 15.6168 7.37257 15.7892 7.37257C15.9657 7.37257 16.1422 7.30443 16.275 7.16884C16.5394 6.90037 16.5353 6.46905 16.2669 6.20535L14.036 4.01195L15.0642 2.99804C17.2842 0.814859 20.8894 0.815541 23.1026 2.99804C24.1751 4.05283 24.7652 5.45309 24.7638 6.94057C24.7638 8.42464 24.1737 9.82013 23.1026 10.8708Z" fill="#666666"></path>
        <path d="M18.3175 8.25158C18.2835 8.22433 18.2487 8.19707 18.2085 8.16981C18.1744 8.14256 18.1335 8.12212 18.0927 8.10849C18.0511 8.08805 18.0109 8.07442 17.9632 8.06761C17.7458 8.02672 17.5067 8.09486 17.3506 8.25158C17.2266 8.38105 17.1523 8.55821 17.1523 8.73537C17.1523 8.91253 17.2266 9.08969 17.3499 9.21916C17.4787 9.34181 17.6491 9.41676 17.8337 9.41676C18.0177 9.41676 18.1881 9.34181 18.3175 9.21916C18.4402 9.08969 18.5151 8.91253 18.5151 8.73537C18.5151 8.55821 18.4402 8.38105 18.3175 8.25158Z" fill="#666666"></path>
    </svg> --}}
    <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 21.5L2 11L0.5 5.5L3 2.5L6.5 1L10.5 1.5L13 4L17.5 1H20L23.5 2.5L25.5 6L24.5 10L13 21.5Z" fill="#fff"/>
        <path d="M24.0586 2.02705C21.3194 -0.675344 16.8556 -0.676026 14.1082 2.02705L13.0657 3.05527L12.0184 2.02637C9.27238 -0.674662 4.80858 -0.676025 2.06871 2.02637C0.73318 3.33942 -0.00136089 5.08514 1.89286e-06 6.94125C0.00136468 8.79395 0.736587 10.5349 2.06871 11.8418L12.5621 22.1649C12.6691 22.2698 12.8047 22.3298 12.9471 22.3462C12.9928 22.3557 13.0405 22.3605 13.0875 22.3605C13.2612 22.3605 13.4336 22.2944 13.5651 22.1649L24.0572 11.8425C25.3907 10.5349 26.1259 8.79395 26.1266 6.94125C26.128 5.08514 25.3934 3.33941 24.0586 2.02705ZM23.1026 10.8708L13.0636 20.7469L3.02334 10.8702C1.95355 9.82013 1.36347 8.42532 1.3621 6.94057C1.36142 5.45309 1.95083 4.05283 3.02334 2.99804C3.02334 2.99804 3.02334 2.99804 3.02402 2.99736C4.1306 1.90645 5.58469 1.36065 7.04014 1.36065C8.49628 1.36065 9.95241 1.90645 11.0624 2.99804L12.5771 4.48552C12.5805 4.48892 12.5812 4.49369 12.5853 4.4971L15.3109 7.17701C15.4437 7.30716 15.6168 7.37257 15.7892 7.37257C15.9657 7.37257 16.1422 7.30443 16.275 7.16884C16.5394 6.90037 16.5353 6.46905 16.2669 6.20535L14.036 4.01195L15.0642 2.99804C17.2842 0.814859 20.8894 0.815541 23.1026 2.99804C24.1751 4.05283 24.7652 5.45309 24.7638 6.94057C24.7638 8.42464 24.1737 9.82013 23.1026 10.8708Z" fill="#3A3A3A"/>
    </svg>
</a>

