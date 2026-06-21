export function ImageSlot({ label, compact = false }: { label: string; compact?: boolean }) {
  return (
    <div className={`image-slot ${compact ? "image-slot--compact" : ""}`} role="img" aria-label={label}>
      <i aria-hidden="true" className="fa-regular fa-image" />
      <span>{label}</span>
    </div>
  );
}
