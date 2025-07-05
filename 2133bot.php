import logging
from telegram.ext import Updater, CommandHandler, MessageHandler, Filters

logging.basicConfig(level=logging.INFO)

TOKEN = '8020098836:AAGmsrRd2vQQS4ExaoqwBc6W2c8GgHNTMk8'

def start(update, context):
    context.bot.send_message(chat_id=update.effective_chat.id, text='مرحبًا! أنا بوت الخدمات.')

def help(update, context):
    context.bot.send_message(chat_id=update.effective_chat.id, text='الأوامر المتاحة: /start, /help')

def handle_message(update, context):
    message = update.message.text
    context.bot.send_message(chat_id=update.effective_chat.id, text='شكرًا على رسالتك!')

def main():
    updater = Updater(token=TOKEN, use_context=True)
    dispatcher = updater.dispatcher

    start_handler = CommandHandler('start', start)
    dispatcher.add_handler(start_handler)

    help_handler = CommandHandler('help', help)
    dispatcher.add_handler(help_handler)

    message_handler = MessageHandler(Filters.text & ~Filters.command, handle_message)
    dispatcher.add_handler(message_handler)

    updater.start_polling()
    updater.idle()

if __name__ == '__main__':
    main()