class HelloCat {
    public static void main(String args[]) {
        new Cat() {{
            this.comment = "Hello, I am a cat.";
            meow();
        }};
    }
}
