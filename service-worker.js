const STATIC_CACHE = "static-cache-v1"
const static_assets = [
    "/",
    "/index.php",
    "https://nomee6.xyz/assets/pp.png",
]
self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(STATIC_CACHE).then(cache => {
            cache.addAll(static_assets)
        })
    )
})
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request);
        })
    )
});
