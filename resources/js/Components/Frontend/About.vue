<template>
  <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
    <div
      class="container mx-auto"
      v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :visible="{
        opacity: 1,
        y: 0,
      }"
    >
      <div class="flex flex-col xl:flex-row gap-24">
        <img
          class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
          src="http://portfolio.test/img/about.jpeg"
          alt="about"
        />
        <div
          class="
            flex flex-col
            items-center
            text-center
            lg:items-start lg:text-left
          "
        >
          <div class="flex flex-col">
            <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
              About Me
            </h2>
            <P class="mb-4 text-accent">Freelance frontend Web developer</P>
            <hr class="mb-8 opacity-90 dark:opacity-5" />
            <p class="mb-8">
              Lorem ipsum dolor sit amet consectetur adipisicing elit tempore
              earum dolorum quo consequatur rem nihil hic ducimus rerum soluta
              neque harum velit molestiae dignissimos distinctio dolorum nisi
              labore culpa nihil. <br />
              <br />
              Qui doloremque quod sit accusantium unde totam inventore
              cupiditate ratione esse maxime eum recusandae ducimus.
            </p>
          </div>
          <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
            Contact me
          </a>
        </div>
      </div>
    </div>
  </section>
</template>