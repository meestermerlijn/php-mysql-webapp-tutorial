<?php
header("Content-Security-Policy: base-uri 'self';" .
    "connect-src 'self';" .
    "default-src 'self';" .
    "form-action 'self';" .
    "img-src 'self' tailwindui.com ;" .
    "media-src 'self';" .
    "object-src 'none';" .
    "script-src cdn.jsdelivr.net cdn.tailwindcss.com unpkg.com 'nonce-" . getNonce() . "' 'unsafe-eval';" .
    "style-src cdn.jsdelivr.net cdn.tailwindcss.com 'self' 'nonce-" . getNonce() . "'"
);