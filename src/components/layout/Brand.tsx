import Image from "next/image";

export function Brand({ footer = false }: { footer?: boolean }) {
  return (
    <a
      className={`brand ${footer ? "brand--footer" : ""}`}
      href="#inicio"
      aria-label="Amaru FS Inmobiliaria"
    >
      <Image
        src={footer ? "/images/logo-footer.webp" : "/images/logo.webp"}
        alt="Amaru FS Inmobiliaria"
        width={250}
        height={80}
        priority
        style={{
          width: "250px",
          height: "auto",
        }}
      />
    </a>
  );
}